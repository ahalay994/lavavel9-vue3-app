import { createApp } from 'vue';
import MainPage from '../../vue/Pages/Main/Index';
import Welcome from "../../vue/Components/Welcome";
import Slider from "../../vue/Components/Slider/Slider";

const app = createApp({})

// page
app.component('main-page', MainPage);

// components
app.component('welcome', Welcome);
app.component('Slider', Slider);

app.mount('#main-page');
