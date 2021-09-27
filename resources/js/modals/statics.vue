<template>
    <div class="modal fade" :class="{fade:!showStaticsModal,show:showStaticsModal,'d-block':showStaticsModal}"
         @click="$emit('closeModal')" >
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" @click="$emit('closeModal')">&times;
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" >
                        <div class="col-md-12 ">
                            <div class="table-responsive">
                                <h3 class="text-center">Statics</h3>
                                <h3 class="text-center">Static by  percent</h3>
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
                                    <tr >
                                        <td v-for="extrasense in calculatedData">
                                            {{((extrasense.reduce((accumulator, a) => { return accumulator + a},0)*100)/extrasense.length).toFixed(2)}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "statics",
    props: ['showStaticsModal'],
    data() {
        return {
            calculatedData: '',
        }
    },
    methods:{
        calcualteExtrasenseData(){
            axios.post('get_extrasenses_data').then(response => {
                this.calculatedData = response.data.check
            })
        }
    },
    mounted() {
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

.modal {
    background-color: rgba(28, 25, 25, 0.7) !important;
}

.myTable {
    color: grey;
    padding: 0;

}
</style>
