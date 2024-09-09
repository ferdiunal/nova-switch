import IndexField from "./components/IndexField";
import DetailField from "./components/DetailField";
import FormField from "./components/FormField";
import Switch from "./components/Switch.vue";

Nova.booting((app, store) => {
    app.component("switch-field", Switch);
    app.component("index-nova-switch", IndexField);
    app.component("detail-nova-switch", DetailField);
    app.component("form-nova-switch", FormField);
});
