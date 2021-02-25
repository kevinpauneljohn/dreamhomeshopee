<template>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group firstname">
                    <label>First Name</label>
                    <input type="text" class="form-control" v-model="data.firstname">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group lastname">
                    <label>Last Name</label>
                    <input type="text" class="form-control" v-model="data.lastname">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group phone">
                    <label>Phone</label>
                    <input type="text" class="form-control" v-model="data.phone">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group email">
                    <label>Email</label><i> (Cannot be change)</i>
                    <input class="form-control" disabled="disabled" v-model="data.email">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group message">
                    <label class="text-bold">Personal info</label>
                    <textarea class="form-control" placeholder="Personal info" v-model="data.description"></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="send-btn">
                    <button class="btn btn-md button-theme" @click.prevent="updateUser">Change Password</button>
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
            data: {
                firstname: this.userData.firstname,
                lastname: this.userData.lastname,
                phone: this.userData.phone,
                description: this.userData.description,
                email: this.userData.email
            }
        }
    },
    methods: {
        updateUser: function (){
            console.log(this.userData.id)
        }
    },
    mounted() {
    }
}
</script>

<style scoped>

</style>
