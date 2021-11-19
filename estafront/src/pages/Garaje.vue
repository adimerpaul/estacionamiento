<template>
<q-page class="q-pa-lg">
  <form action="" @submit.prevent="registrarlog">
  <select name="" id="" v-model="log.auto_id">
    <option v-for="auto in autos" :key="auto.id" :value="auto.id">{{auto.placa}}</option>
  </select>
  <input type="text" placeholder="Monto"  v-model="log.monto">
    <input type="submit">
  </form>
  <hr>
  <table border="1" style="width: 100%">
    <tr>
      <th>#</th>
      <th>fecha</th>
      <th>hora</th>
      <th>monto</th>
      <th>placa</th>
      <th>usuario</th>
    </tr>
    <tr v-for="l in logs" :key="l.id">
      <td>{{l.id}}</td>
      <td>{{l.fecha}}</td>
      <td>{{l.hora}}</td>
      <td>{{l.monto}} Bs.</td>
      <td>{{l.auto.placa}}</td>
      <td>{{l.user.name}}</td>
    </tr>
  </table>
  <b>total recaudado:</b> {{total}} Bs.
</q-page>
</template>

<script>
export default {
  data(){
    return{
      autos:[],
      log:{monto:10},
      logs:[]
    }
  },
  created(){
    //console.log(localStorage.getItem('token'))
    this.$axios.get(process.env.API+'/auto').then(res=>{
      // console.log(res.data)
      this.autos=res.data
    })
    this.mislogs()
  },
  methods:{
    registrarlog(){
      this.$axios.post(process.env.API+'/log',this.log).then(res=>{
        this.mislogs()
        this.log={monto:10}
      })
    },
    mislogs(){
      this.$axios.get(process.env.API+'/log').then(res=>{
        console.log(res.data)
        this.logs=res.data
      })
    }
  },
  computed:{
    total(){
      let s=0
      this.logs.forEach(r=>{
        s=s+ parseInt( r.monto)
      })
      return s;
    }
  }
}
</script>

<style scoped>

</style>
