import { createApp } from 'vue';
import MainPage from '../../vue/Pages/Main/Index';
import Welcome from "../../vue/Components/Welcome";

const app = createApp({})

// page
app.component('main-page', MainPage);

// components
app.component('welcome', Welcome);

app.mount('#main-page');
