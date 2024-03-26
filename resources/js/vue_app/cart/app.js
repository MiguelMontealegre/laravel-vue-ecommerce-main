import { createApp } from "vue";
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'

import Cart from "./components/Cart.vue"

const app = createApp(Cart)
app.use(ElementPlus)
app.mount("#cart")
