<template>
    <form method="post" enctype="multipart/form-data" @submit.prevent="submit">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group firstname">
                    <label>First Name</label>
                    <input name="firstname" type="text" class="form-control" v-model="user.firstname">
                    <div v-if="errors && errors.firstname" class="text-danger">{{ errors.firstname[0] }}</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group lastname">
                    <label>Last Name</label>
                    <input name="lastname" type="text" class="form-control" v-model="user.lastname">
                    <div v-if="errors && errors.lastname" class="text-danger">{{ errors.lastname[0] }}</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group phone">
                    <label>Phone</label>
                    <input name="phone" type="text" class="form-control" v-model="user.phone">
                    <div v-if="errors && errors.phone" class="text-danger">{{ errors.phone[0] }}</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group email">
                    <label>Email</label><i> (Cannot be change)</i>
                    <input class="form-control" disabled="disabled" v-model="user.email">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group message">
                    <label class="text-bold">Personal info</label>
                    <textarea class="form-control" placeholder="Personal info" v-model="user.description"></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="send-btn">
                    <button class="btn btn-md button-theme">Update</button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: "PersonalInfoComponent",
    props: ['userData'],
    data(){
        return {
            user: {
                firstname: this.userData.firstname,
                lastname: this.userData.lastname,
                phone: this.userData.phone,
                description: this.userData.description,
                email: this.userData.email
            },
            errors:{}
        }
    },
    methods: {
        submit(){
            this.errors = {};
            axios.post('/my-profile/update', this.user)
                .then(response => {
                    console.log(response.data);
                }
            ).catch(error => {
                if(error.response.status === 422)
                {
                    this.errors = error.response.data.errors || {};
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
