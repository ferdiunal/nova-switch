<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial value for the field
         */
        setInitialValue() {
            this.value = this.currentField.value ?? this.value
        },

        /**
         * Return the field default value.
         */
        fieldDefaultValue() {
            return false
        },

        toggle() {
            this.value = !this.value

            if (this.field) {
                this.emitFieldValueChange(this.fieldAttribute, this.value)
            }
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            this.fillIfVisible(formData, this.fieldAttribute, this.trueValue)
        },
    },

    computed: {
        checked() {
            return Boolean(this.value)
        },

        trueValue() {
            return +this.checked
        },

        label() {
            return this.checked ? this.field.trueValueLabel : this.field.falseValueLabel
        },
    },
}
</script>
<template>
    <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText" :full-width-content="fullWidthContent">
        <template #field>
            <switch-field v-model="value" @change="toggle" :model-value="checked" :name="field.name" :label="label"
                :id="field.uniqueKey" />
        </template>
    </DefaultField>
</template>
