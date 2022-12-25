<script setup>
import Layout from '@/Layouts/AppLayout.vue';
defineProps({
  users: Array,
});
</script>

<template>
  <Layout>

    <div class="py-3 container mx-auto">
      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="">
        <div class="mb-4">
          <!--  <inertia-link :href="route('permission.index')">
            <v-btn class="">
              <v-icon left>mdi-key</v-icon>
              Permissões
            </v-btn>
          </inertia-link>
        -->
          <!-- <inertia-link :href="route('role.index')">
            <v-btn>
              <v-icon left> mdi-account-lock </v-icon>
              Perfils
            </v-btn>
          </inertia-link> -->
        </div>
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="
                shadow
                overflow-hidden
                border-b border-gray-200
                sm:rounded-lg
              ">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-500">
                  <tr>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Nome
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Cargo
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Perfil
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Status
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Opções
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr
                    v-for="(user, index) in users"
                    :key="user.id"
                  >
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                          <v-avatar
                            size="40"
                            color="#660708"
                          >
                            <v-img
                              class="h-10 w-10 rounded-full"
                              :src="user.profile_photo_url"
                              alt=""
                            ></v-img>

                          </v-avatar>
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            {{ user.name }}
                          </div>
                          <div class="text-sm text-gray-500">
                            {{ user.email }}
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        Undefined
                      </div>
                      <div class="text-sm text-gray-500">Undefined</div>
                    </td>

                    <td class="
                        px-6
                        py-4
                        whitespace-nowrap
                        text-sm text-gray-500
                        capitalize
                      ">
                      <!-- <v-chip
                        v-for="role in user.roles"
                        :key="role.id"
                        class="mr-1"
                        label
                      >
                        {{ role.name }}
                      </v-chip> -->
                    </td>
                    <td class="
                        px-6
                        py-4
                        whitespace-nowrap
                        text-sm text-gray-500
                        capitalize
                      ">
                      <!-- <v-chip
                        @click="updateUser(user, index)"
                        v-if="user.active"
                        color="#C8E6C9"
                        class="mr-1"
                        label
                      >
                        Ativo
                      </v-chip>
                      <v-chip
                        v-else
                        @click="updateUser(user, index)"
                        color="#eeeeee"
                        class="mr-1"
                        label
                      >
                        Desativado
                      </v-chip> -->
                    </td>

                    <td class="
                        px-6
                        py-4
                        h-full
                        whitespace-nowrap
                        flex
                        align-center
                      ">
                      <div class="mx-2 h-full">
                        <!-- <inertia-link :href="route('users.edit', { id: user.id })">
                          <v-icon
                            medium
                            class="text-indigo-600 hover:text-indigo-900"
                          >mdi-account-edit</v-icon>
                        </inertia-link> -->
                      </div>
                      <div class="mx-2 h-full">
                        <!-- <inertia-link :href="route('users.show', { id: user.id })">
                          <v-icon medium>mdi-account-details </v-icon>
                        </inertia-link> -->
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>
