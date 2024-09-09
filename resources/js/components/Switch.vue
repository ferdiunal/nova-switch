<script setup>
import { Switch } from '@headlessui/vue'
import { defineProps, defineEmits, computed } from 'vue'

const props = defineProps({
    modelValue: Boolean,
    name: String,
    label: String,
    id: String,
})

const emit = defineEmits(['update:modelValue'])
const value = computed({
    get: () => props.modelValue,
    set: val => emit('update:modelValue', val),
})

</script>
<template>
    <div class="md:ns-mt-2 ns-flex ns-items-center ns-gap-x-4">
        <Switch v-model="value" :name="name" :id="id"
            :class="[value ? 'ns-bg-primary-500 ns-ring-primary-500' : 'ns-bg-gray-950/10 ns-ring-gray-950/10', 'ns-ring-2 ns-ring-offset-2']"
            class="ns-relative ns-inline-flex ns-h-5 ns-w-10 ns-items-center ns-rounded-full">
            <span class="ns-sr-only">Enable notifications</span>
            <span :class="value ? 'ns-translate-x-5' : 'ns-translate-x-1'"
                class="ns-inline-block ns-h-4 ns-w-4 ns-transform ns-rounded-full ns-bg-white ns-transition ns-delay-75 ns-duration-150 ns-ease-linear" />
        </Switch>
        <span class="pointer-events-none text-center text-sm text-gray-500 dark:text-gray-400 font-semibold">{{ label
            }}</span>
    </div>
</template>
