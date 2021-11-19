<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="toggleLeftDrawer"
        />

        <q-toolbar-title>
          Sistema de prestamos
        </q-toolbar-title>

        <div>Quasar v{{ $q.version }}</div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
    >
      <q-list>
        <q-item-label
          header
        >
          Essential Links
        </q-item-label>

<!--        <EssentialLink-->
<!--          v-for="link in essentialLinks"-->
<!--          :key="link.title"-->
<!--          v-bind="link"-->
<!--        />-->

        <q-item clickable v-ripple to="/" exact>
          <q-item-section>Principal</q-item-section>
        </q-item>
        <q-item clickable v-ripple to="/login" exact>
          <q-item-section>Login</q-item-section>
        </q-item>
        <q-item clickable v-ripple to="/secure" exact>
          <q-item-section>Secure</q-item-section>
        </q-item>
        <q-item clickable v-ripple to="/garaje" exact>
          <q-item-section>Cobro de garaje</q-item-section>
        </q-item>
        <q-item clickable v-ripple @click="logout" exact>
          <q-item-section>Salir</q-item-section>
        </q-item>


      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
// import EssentialLink from 'components/EssentialLink.vue'
//
// const linksList = [
//   {
//     title: 'Docs',
//     caption: 'quasar.dev',
//     icon: 'school',
//     link: 'https://quasar.dev'
//   },
//   {
//     title: 'Github',
//     caption: 'github.com/quasarframework',
//     icon: 'code',
//     link: 'https://github.com/quasarframework'
//   },
//   {
//     title: 'Discord Chat Channel',
//     caption: 'chat.quasar.dev',
//     icon: 'chat',
//     link: 'https://chat.quasar.dev'
//   },
//   {
//     title: 'Forum',
//     caption: 'forum.quasar.dev',
//     icon: 'record_voice_over',
//     link: 'https://forum.quasar.dev'
//   },
//   {
//     title: 'Twitter',
//     caption: '@quasarframework',
//     icon: 'rss_feed',
//     link: 'https://twitter.quasar.dev'
//   },
//   {
//     title: 'Facebook',
//     caption: '@QuasarFramework',
//     icon: 'public',
//     link: 'https://facebook.quasar.dev'
//   },
//   {
//     title: 'Quasar Awesome',
//     caption: 'Community Quasar projects',
//     icon: 'favorite',
//     link: 'https://awesome.quasar.dev'
//   }
// ];

// import { defineComponent, ref } from 'vue'
//
// export default defineComponent({
//   name: 'MainLayout',
//
//   // components: {
//   //   EssentialLink
//   // },
//
//   setup () {
//     const leftDrawerOpen = ref(false)
//
//     return {
//       essentialLinks: linksList,
//       leftDrawerOpen,
//       toggleLeftDrawer () {
//         leftDrawerOpen.value = !leftDrawerOpen.value
//       }
//     }
//   }
// })
export default {
  data(){
    return {
      leftDrawerOpen:false
    }
  },
  methods:{
    toggleLeftDrawer () {
        this.leftDrawerOpen = !this.leftDrawerOpen
      },
    logout(){
      this.$store.dispatch('login/logout')
        .then(() => {
          this.$router.push('/login')
        })
    }
  }
}
</script>
