<template>
    <div class="">
      <h1>{{ this.message }}</h1>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Ajouter un produit</h2>
      </div>

      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-4" method="POST" @submit="createProduit">
          <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">nom</label>
            <div class="mt-2">
              <input id="email" v-model="produits.nom" name="nom" type="text" autocomplete="email"  class="focus:outline-none px-2 focus:border-blue-300 text-gray-600 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
             <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">description</label>
                <div class="mt-2">
                  <input id="email" v-model="produits.description" name="description" type="text" autocomplete="email"  class="focus:outline-none px-2 focus:border-blue-300 text-gray-600 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
               <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">prix</label>
                <div class="mt-2">
                  <input id="number" v-model="produits.prix" name="email" type="number" autocomplete="email"  class="focus:outline-none px-2 focus:border-blue-300 text-gray-600 block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter</button>
          </div>
        </form>
      </div>
    </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'createPage',

    data() {
        return {
          produits: [
                {
                  nom: "",
                  description: "",
                  prix:""
                }
            ],
          errors: [],
          message:""
        }
    },

    methods: {  
        createProduit(e) {
            e.preventDefault();
            if (!this.produits.nom) {
              alert("veiller remplir les champs");
            }
            
            var newProduit = {
                nom: this.produits.nom,
                description: this.produits.description,
                prix: this.produits.prix
            }

        axios.post('http://localhost:8000/api/create', newProduit).then((res) => {
              this.message = res.data.message

          
            })
        this.produits = {
        nom: "",
        description: "",
        prix: ""
        }
        setTimeout(() => {
          this.message = ""
       },2000)
        }
    }
}
</script>


<style ></style>