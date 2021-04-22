<template>
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Guest Logs</h3>
                    <a href="/report/guest" class="btn btn-primary m-4">Generate Report</a>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                       <thead>
                        <tr>
                            <tr>
                                <th>Guest</th>
                                <th>Date Entered</th>
                            </tr>   
                        </thead>
                                    
                        <tbody>
                            <tr v-for="data in datas" :key="data.id">
                            <th scope="row">{{ data.guest.fname }} {{ data.guest.lname }} </th>  
                            <td> {{ data.datetime_In }}</td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <!-- <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            datas:[],
             interval: null
           
          }
         },
      
        mounted() {
            // console.log('Component mounted.')
            setInterval(()=>{
                axios.get('api/scanned/qr/logs')
                .then(response =>{
                       console.log(response.data.data)
                    this.datas = response.data.data
                 
                });
            },1000)
           
        },

    }
</script>
