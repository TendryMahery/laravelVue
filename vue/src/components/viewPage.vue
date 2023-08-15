<template>
   <div>
    <h1  class="text-3xl font-bold">List view</h1>
    <div class="flex justify-center content-center items-center p-8">
       
            <table class="border-collapse border border-slate-500 ... ">
                <thead>
                    <tr>
                    <th class="border border-slate-600 p-3 ...">id</th>
                    <th class="border border-slate-600 p-3 ...">nom</th>
                    <th class="border border-slate-600 p-3 ...">cours</th>
                    <th class="border border-slate-600 p-3 ...">email</th>
                    <th class="border border-slate-600 p-3 ...">createdAt</th>
                    <th class="border border-slate-600 p-3 ...">action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="produit in produits" :key ="produit.id">
                    <td class="border border-slate-700 p-3 ...">{{ produit.id }}</td>
                    <td class="border border-slate-700 p-3 ...">{{ produit.nom }}</td>
                    <td class="border border-slate-700 p-3 ...">{{ produit.description }}</td>
                    <td class="border border-slate-700 p-3 ...">{{ produit.prix }}</td>
                    <td class="border border-slate-700 p-3 ...">{{ produit.created_at}}</td>
                    <td class="border border-slate-700 p-3 ... space-x-3">
                      <router-link :to="{path:'update/'+produit.id}" ><i class="fas fa-edit text-blue-600"></i> </router-link> 
                        <i class="fas fa-trash-alt text-red-600"></i>
                    </td>
                    </tr>
                </tbody>
            </table>
    </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'viewPage',
    data() {
        return {
       produits: []
       }
    },
    mounted() {
        this.getEtudiant()
    },

    methods: {
        getEtudiant() {
            axios.get('http://localhost:8000/api/view').then( (res) => {
              this.produits = res.data
            })
        }
    }
}
</script>


<style ></style>