<template>
  <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <router-link tag="li" to="/objave">
             <a>Objava</a>  
        </router-link>
          <router-link tag="li" to="/racuni">
             <a>Dugovanja</a>     
        </router-link>
          <router-link tag="li" to="/plan">
             <a>Plan ciscenja</a>  
        </router-link>
        <router-link tag="li" to="/info">
             <a>Info</a>  
        </router-link>
        <router-link tag="li" to="/izvestaji">
             <a>Izvestaji</a>  
        </router-link>
        <router-link tag="li" to="/podesavanja">
             <a>Podesavanja</a>  
        </router-link>
        </ul>
      </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>