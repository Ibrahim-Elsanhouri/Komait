<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <a href="https://shouts.dev/" target="_blank"><img src="https://i.imgur.com/hHZjfUq.png"></a><br>
            <span class="text-secondary">Dependent Dropdown with Laravel and VueJS</span>
        </div>
        <div class="row justify-content-center" style="margin: 20px 0px 20px 0px;">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="form-group">
                            <label>Select Country:</label>
                            <select class='form-control' v-model='type' @change='getKeys()'>
                                <option value='0' >Select Types</option>
                                <option v-for="data in types" v-bind:key="data.id">{{ data.name }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Select State:</label>
                            <select class='form-control' v-model='key'>
                                <option value='0' >Select State</option>
                            <option v-for="data in keys" v-bind:key="data.id">{{ data.name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
    export default {
        data(){
            return {
                type: 0,
                types: [],
                key: 0,
                keys: []
            }
        },
        methods:{
            getTypes: function(){
                axios.get('/types')
                    .then(function (response) {
                        this.types = response.data;
                    }.bind(this));

            },
            getKeys: function() {
                axios.get('/get_type_keys',{
                    params: {
                        types_id: this.type
                    }
                }).then(function(response){
                    this.statkeyses = response.data;
                }.bind(this));
            }
        },
        created: function(){
            this.getTypes()
        }
    }
</script>