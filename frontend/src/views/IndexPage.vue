<template>
    <div>
        <insert @data-saved="getInfo"/>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Logo</th>
        <th>About</th>
        <th>Date Added</th>
        <th>Action</th>
    </tr>
    <tr v-for="service in service">
    <td>{{ service.name }}</td>
    <td>{{ service.logo }}</td>
    <td>{{ service.about }}</td>
    <td>{{ service.DateAdded }}</td>
    <td><button @click="deleteRecord(service.id)">Delete</button></td>
    </tr>
</table>
</div>
</template>

<script>
import insert from '@/components/insert.vue'
import axios from 'axios';
export default{
components:{
        insert,
    },
data(){
    return{
        service:[],
        name:"",
            logo:"",
            about:"",
            DateAdded:""
    }
},
created(){
this.getInfo();
},
methods:{
    async deleteRecord(recordId){
        const confirm = window.confirm("Are you sure you want to delete this?");
        if(confirm){
            await axios.post("del", {
            id: recordId,
        });
        this.getInfo();
        }
    },
    async getInfo(){
        try{
            const inf = await axios.get('getData');
            this.service = inf.data;
        }
        catch (error){
            console.log(error);
        }
    }
}
}
</script>