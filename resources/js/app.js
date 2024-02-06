/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

// Import components
import App from './layouts/App.vue';
import IndexComponent from './components/Product.vue';
import CreateComponent from './components/Create.vue';
import EditComponent from './components/Edit.vue';
// import viewComponent from './components/view.vue';
// import router from './routes.js';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: EditComponent },
        { path: '/products/create', component: CreateComponent },
        { path: '/products/:id', component: IndexComponent },
        { path: '/products/:id/edit', component: IndexComponent },
    ]
});
const app = createApp(App);
// app.component('component-app', App)
app.use(router);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#apk');
