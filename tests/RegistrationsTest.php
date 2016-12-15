<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Registration;
use App\Person;
use App\Field;

class RegistrationsTest extends TestCase
{

    // use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNewRegistration()
    {
        $student = Person::create(factory(App\Person::class)->make()->toArray());
        $parent1 = Person::create(factory(App\Person::class)->make()->toArray());
        $parent2 = Person::create(factory(App\Person::class)->make()->toArray());
        $field = Field::first();
        $registration = Registration::fromForm('Test', $field->id, $student, $parent1, $parent2);


        $this->assertEquals($field->id, $registration->field_id);
        $this->assertEquals($registration->student_id, $student->id);
        $this->assertEquals($registration->parent1_id, $parent1->id);
        $this->assertEquals($registration->parent2_id, $parent2->id);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegistrateStudentWithOneParent()
    {
        $student = factory(App\Person::class)->make();
        $parent1 = factory(App\Person::class)->make();
        $parent2 = factory(App\Person::class)->make();
        $field = Field::first();

        $faker = \Faker\Factory::create();
        $this->visit('registration');
        $this->type($field->id, 'field');
        $this->type($student->firstname, 'student[firstname]');
        $this->type($student->lastname, 'student[lastname]');
        $this->type($student->personal_code, 'student[personal_code]');
        $this->type($student->address, 'student[address]');

        $this->type($parent1->firstname, 'parent1[firstname]');
        $this->type($parent1->lastname, 'parent1[lastname]');
        $this->type($parent1->personal_code, 'parent1[personal_code]');
        $this->type($parent1->phone, 'parent1[phone]');
        $this->type($parent1->email, 'parent1[email]');
        $this->type($parent1->work_place, 'parent1[work_place]');
        $this->type($parent1->address, 'parent1[address]');

        $this->type($parent2->firstname, 'parent2[firstname]');
        $this->type($parent2->lastname, 'parent2[lastname]');
        $this->type($parent2->personal_code, 'parent2[personal_code]');
        $this->type($parent2->phone, 'parent2[phone]');
        $this->type($parent2->email, 'parent2[email]');
        $this->type($parent2->work_place, 'parent2[work_place]');
        $this->type($parent2->address, 'parent2[address]');

        $this->press('Registreeri');

        $this->seeInDatabase('people', [
            'firstname' => $student->firstname,
            'lastname' => $student->lastname,
            'personal_code' => $student->personal_code,
            'address' => $student->address,
        ]);

        $this->seeInDatabase('people', [
            'firstname' => $parent1->firstname,
            'lastname' => $parent1->lastname,
            'personal_code' => $parent1->personal_code,
            'address' => $parent1->address,
            'phone' => $parent1->phone,
            'email' => $parent1->email,
            'work_place' => $parent1->work_place,
        ]);

        $this->seeInDatabase('people', [
            'firstname' => $parent2->firstname,
            'lastname' => $parent2->lastname,
            'personal_code' => $parent2->personal_code,
            'address' => $parent2->address,
            'phone' => $parent2->phone,
            'email' => $parent2->email,
            'work_place' => $parent2->work_place,
        ]);

        $this->seeInDatabase('registrations', [
            'field_id' => $field->id
        ]);

        $this->seePageIs('registration');
        $this->see('Aitäh, registreerimine õnnestus! Me võtame Teiega ühendust.');
    }
}
