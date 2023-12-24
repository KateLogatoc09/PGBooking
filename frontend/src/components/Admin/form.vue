<template>  
        <!-- New User Information Form -->
    <div class="user-information-form mt-4">
      <h2>Information</h2>
      <form @submit.prevent="submitForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="formData.name" class="form-control" required />
          </div>

          <div class="form-group col-md-6">
            <label for="age">Age:</label>
            <input type="number" id="age" v-model="formData.age" class="form-control" required />
          </div>
       

       
          <div class="form-group col-md-6">
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" v-model="formData.birthdate" class="form-control" required />
          </div>

          <div class="form-group col-md-6">
            <label for="photo">Photo:</label>
            <input type="file" id="photo" @change="handlePhotoChange" class="form-control" accept="image/*" />
            <img v-if="formData.photo" :src="formData.photo" alt="User's Photo"
              style="max-width: 100px; max-height: 100px; margin-top: 10px;" />
          </div>
   
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!-- End of User Information Form -->
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          name: '',
          age: null,
          birthdate: '',
          photo: null,
        },
      };
    },
    methods: {
      submitForm() {
        // Handle form submission logic here
        console.log('Form submitted with data:', this.formData);
        // You can send the form data to the server or perform other actions as needed
      },
      handlePhotoChange(event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = (e) => {
            this.formData.photo = e.target.result;
          };
          reader.readAsDataURL(file);
        }
      },
    },
  };
  </script>
  
  <style scoped>
        .user-information-form {
        max-width: 400px; /* Adjust the maximum width as needed */
        margin: 0 auto; /* Center the form horizontally */
        }

        .form-group {
        margin-bottom: 15px; /* Add some space between form elements */
        }

        /* Add your component-specific styles here if needed */
</style>
  