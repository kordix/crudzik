Vue.component('read', {
    data() {
        return {
            heads: [],
            cruddata: [],
        }
    },
    created() {
        let self = this;
        axios.get('api/read.php').then((res) => this.cruddata = res.data).then((res) => self.getHeads());
    },
    methods: {
        edit(id) {
            this.$emit('editevent', id);
        },
        deletem(id) {
            axios.post('api/delete.php', { id: id }).then((res) => console.log(res)).then((res) => location.reload());
        },
        getHeads(){
            if(this.cruddata[0]){
                this.heads = Object.keys(this.cruddata[0])
            }
        }
    }
});

Vue.component('edit', {
    props: ['id', 'mode'],
    data() {
        return {
            cruddata: {},
            editid: null,
            action: 'api/add.php',
            editid:null,
        }
      },
    watch: {
        id() {
            this.getData();
        },
        mode(val) {
            if (val == 'edit') {
                this.action = 'api/update.php'
            } else {
                this.action = 'api/add.php'
            }
        }
    },
    created() {
        if (this.mode == 'edit') {
            this.getData();
        } else {
            // this.cruddata={};
        }
    },
    methods: {
        getData() {
            let self = this;
            axios.get('api/readone.php?id=' + self.id).then((res) => self.cruddata = res.data)
        }
       
    }
});





let app = new Vue({
    el: '#app',
    data: {
        //REPLACE
        dane: [{"nazwa":"id","typ":"int AUTO_INCREMENT PRIMARY KEY"},{"nazwa":"imie","typ":"varchar(180)"},{"nazwa":"nazwisko","typ":"varchar(180)"},{"nazwa":"miasto","typ":"varchar(180)"},{"nazwa":"ulica","typ":"varchar(180)"}],
    editid:null,
    mode:'create'
        
    },
    methods:{
        edit(id){
            this.editid = id;
            this.mode='edit';
        }
    }
})