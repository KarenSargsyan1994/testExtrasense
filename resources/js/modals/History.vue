<template>
    <div class="modal fade" :class="{fade:!showHistory,show:showHistory,'d-block':showHistory}"   @click="$emit('closeModal')">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"  @click="$emit('closeModal')">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row" >
                        <div class="col-md-12 ">
                            <div class="table-responsive">
                                <h3 class="text-center">History</h3>
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
                                    <tr v-for="(round,key) in rounds">
                                        <td v-for="extrasensNumber in calculatedData" :class="{'text-success':typeof extrasensNumber[key] === 'string','text-danger':typeof extrasensNumber[key] === 'number'}">
                                            {{extrasensNumber[key]}}
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Clos</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "History",
    props:['showHistory'],
    data(){
        return {
            calculatedData: '',
            rounds:''
        }
    },
    methods:{
        calcualteExtrasenseData(){
            axios.post('get_extrasenses_data').then(response => {
                this.calculatedData = response.data.answer
                this.rounds = response.data.rounds
            })
        }
    },
    mounted(){
        this.calcualteExtrasenseData()
    }

}
</script>

<style scoped>
.modal-body {
    margin: 0 !important;
}

.modal {
    padding: 0 !important;
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
    background-color: rgba(28, 25, 25, 0.7) !important;
}

.myTable {
    color: grey;
    padding: 0;

}
</style>
