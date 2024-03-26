import { createApp } from "vue";
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

import Product from "./Product.vue"

const app = createApp(Product)
app.use(ElementPlus)
app.mount("#product")
