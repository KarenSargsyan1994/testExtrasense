<template>
    <div class="jerki">
        <div class="modal" :class="{fade:!showModal,show:showModal,'d-block':showModal}" @click="$emit('closeModal')"
             id="myModal1">
            <div class="modal-dialog modal-xl" @click.stop="">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" @click="$emit('closeModal')">&times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row" >
                            <div class="col-md-4 offset-4 >
                                <div class="form-group">
                                    <input type="number" v-model="number" min="1" max="999" class="form-control"
                                           id="test_num"
                                           placeholder=" 1 to 999">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill </div>
                                </div>
                                <div class="form-group d-flex justify-content-around ">
                                    <button type="submit" @click="readyNumber()" class="btn btn-warning ready">Check
                                    </button>
                                </div>

                            </div>
                            <div class="col-md-8 offset-2 myTable">
                                <div class="table-responsive">
                                    <p>Битва экстрасенсов</p>
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>Vanga</th>
                                            <th>Gendelf</th>
                                            <th>Noustradamos</th>
                                            <th>x1</th>
                                            <th>x2</th>
                                            <th>x3</th>
                                            <th>x4</th>
                                        </tr>
                                        </thead>
                                        <tbody class="tbody">
                                        <tr v-for="round in extrasenseNumbers">
                                            <td v-for="extrasensNumber in round" :class="{'text-success':typeof extrasensNumber === 'string','text-danger':typeof extrasensNumber === 'number'}">
                                                {{extrasensNumber}}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "test",
    props: ['showModal'],
    data() {
        return {
            number: '',
            extrasenseNumbers: []
        }
    },
    methods: {
        readyNumber() {
            if (this.number > 9 && this.number < 1000) {
                axios.post('get_answers', {number: this.number}).then(responce => {
                   this.extrasenseNumbers.push(responce.data)
                })
            } else {
                alert('number 1-999')
            }
        }
    }
}
</script>

<style scoped>
.modal-body {
    margin: 0 !important;
}
/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 80vh;
    overflow-y: auto;
}
.modal {

    padding: 0 !important;
}

.modal {
    background-color: rgba(28, 25, 25, 0.7) !important;
}

.myTable {
    color: grey;
    padding: 0;

}

</style>
