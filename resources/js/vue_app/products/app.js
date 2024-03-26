import { createApp } from "vue";
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

import Products from "./components/Products.vue"

const app = createApp(Products)
app.use(ElementPlus)
app.mount("#products")
