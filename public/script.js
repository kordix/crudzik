let app = new Vue({
    data:{
        obiekt:{tabela:'klienci', dane:{imie:'asdfdupa',nazwisko:'siema'},id:4}
    },
    el:'#app',
    methods:{
        test(){
            axios.post('api/update.php', this.obiekt);
        }
    }
})