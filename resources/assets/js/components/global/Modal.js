Vue.component('modal', {
    template: `
    <div class="modal is-active">
      <div class="modal-background"></div>
      <div class="modal-card">
         <header class="modal-card-head">
           <p class="modal-card-title">Modal title</p>
           <button class="delete"></button>
         </header>
         <section class="modal-card-body">
           <!-- Content ... -->
         </section>
         <footer class="modal-card-foot">
           <a class="button">Cancel</a>
         </footer>
         </div>
    </div>
    `,

    data() {
        return {
            tabs: []
        };
    },

});
