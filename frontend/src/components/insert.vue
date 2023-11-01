<template>
    <div>
        <form @submit.prevent="save">
            <label for="name">Name: </label>
            <input type="text" placeholder="name" v-model="name"><br><br>
            <label for="logo">Logo: </label>
            <input type="number" placeholder="logo" v-model="logo"><br><br>
            <label for="about">About: </label>
            <input type="text" placeholder="about" v-model="about"><br><br>
            <label for="DateAdded">Date Added: </label>
            <input type="datetime-local" placeholder="DateAdded" v-model="DateAdded"><br><br>   
            <button type="submit">submit</button><br><br>      
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default{
    data(){
        return{
            name:"",
            logo:"",
            about:"",
            DateAdded:""
        }
    },
    methods:{
        async save(){
            try{
            const ins = await axios.post("save",{
                name: this.name,
                logo: this.logo,
                about: this.about,
                DateAdded: this.DateAdded,
            });
            this.name="";
            this.logo="";
            this.about="";
            this.DateAdded="";

            this.$emit('data-saved');
            this.getInfo();
        }
        catch (error){
            console.log(error);
        }
        }
    }
}
</script>