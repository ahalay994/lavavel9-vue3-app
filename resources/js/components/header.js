import { createApp } from 'vue';
import Header from "../../vue/Components/Header/Header";
import HeaderMenu from "../../vue/Components/Header/HeaderMenu";
import HeaderMenuItem from "../../vue/Components/Header/HeaderMenuItem";
import HeaderLogo from "../../vue/Components/Header/HeaderLogo";
import HeaderUser from "../../vue/Components/Header/HeaderUser";
import HeaderMenuButtonToggle from "../../vue/Components/Header/HeaderMenuButtonToggle";

const app = createApp({})

app.component('v-header', Header);
app.component('v-header-menu', HeaderMenu);
app.component('v-header-menu-item', HeaderMenuItem);
app.component('v-header-logo', HeaderLogo);
app.component('v-header-user', HeaderUser);
app.component('v-header-menu-button-toggle', HeaderMenuButtonToggle);

app.mount('#header');
