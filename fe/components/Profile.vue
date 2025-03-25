<template>
  <div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
      <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="flex items-center space-x-6">
          <img
            src="https://kamil.web.id/images/avatar-square.jpg"
            alt="Profile Picture"
            class="w-32 h-32 rounded-full border-4 border-indigo-500"
          />
          <div>
            <h1 class="text-3xl font-bold text-gray-900">{{ profile.name }}</h1>
            <p class="text-gray-600 mt-1">{{ profile.job_title }}</p>
            <p class="text-gray-500 mt-2">{{ profile.location }}</p>
          </div>
        </div>
        <div class="mt-6 border-t border-gray-200 pt-6">
          <h2 class="text-xl font-semibold text-gray-900">About Me</h2>
          <p class="mt-2 text-gray-600 leading-relaxed">
            Passionate software engineer with 10+ years of experience in building
            scalable web applications. Specializing in Full-stack development solution.
            Always eager to learn new technologies and solve complex problems.
          </p>
        </div>
      </div>

      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-lg font-medium text-gray-900">Projects</h3>
          <p class="mt-2 text-3xl font-bold text-indigo-600">42</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-lg font-medium text-gray-900">Followers</h3>
          <p class="mt-2 text-3xl font-bold text-indigo-600">1.2K</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h3 class="text-lg font-medium text-gray-900">Following</h3>
          <p class="mt-2 text-3xl font-bold text-indigo-600">350</p>
        </div>
      </div>

      <div class="mt-8 bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-xl font-semibold text-gray-900">Recent Activity</h2>
        <div class="mt-4 space-y-4">
          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
              <div
                class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center"
              >
                <svg
                  class="w-6 h-6 text-indigo-500"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                  ></path>
                </svg>
              </div>
            </div>
            <div>
              <p class="text-gray-900">
                Created new project "Library Management System"
              </p>
              <p class="text-sm text-gray-500">2 hours ago</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
              <div
                class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center"
              >
                <svg
                  class="w-6 h-6 text-green-500"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 10h18M3 14h18m-9-4v8m0-8l4 4m-4-4l-4 4"
                  ></path>
                </svg>
              </div>
            </div>
            <div>
              <p class="text-gray-900">
                Contributed to open source project "Vue UI Library"
              </p>
              <p class="text-sm text-gray-500">1 day ago</p>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-8 bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-xl font-semibold text-gray-900">Skills</h2>
        <div class="mt-4 space-x-2">
          <span
            v-for="(skill, index) in skills"
            :key="index"
            class="inline-flex items-center px-3 py-1 bg-gray-200 rounded-full text-sm font-medium text-gray-800"
          >
            {{ skill }}
          </span>
        </div>
      </div>

      <div class="mt-8 bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-xl font-semibold text-gray-900">Projects</h2>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="border rounded-lg p-4">
            <h3 class="text-lg font-semibold text-gray-900">
              Library Management System
            </h3>
            <p class="mt-2 text-gray-600">
              A web application for managing library resources.
            </p>
            <a href="#" class="mt-2 text-indigo-600 hover:underline"
              >View Project</a
            >
          </div>
          <div class="border rounded-lg p-4">
            <h3 class="text-lg font-semibold text-gray-900">
              E-commerce Platform
            </h3>
            <p class="mt-2 text-gray-600">
              A platform for buying and selling products online.
            </p>
            <a href="#" class="mt-2 text-indigo-600 hover:underline"
              >View Project</a
            >
          </div>
        </div>
      </div>

      <div class="mt-8 bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-xl font-semibold text-gray-900">Social Links</h2>
        <div class="mt-4 flex space-x-4">
          <a href="#" class="text-indigo-600 hover:text-indigo-500" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
            </svg>
          </a>
          <a href="#" class="text-indigo-600 hover:text-indigo-500" aria-label="GitHub">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.766.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
          </a>
          <a href="#" class="text-indigo-600 hover:text-indigo-500" aria-label="Twitter">
            <svg xmlns="http://www.w.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.184-.896-.956-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const skills = ref(['Laravel', 'Vue.js', 'Node.js', 'JavaScript', 'Tailwind CSS'])

// Fetch profile from API
const { data: profile } = await useFetch('/api/profile', {
  baseURL: 'http://library-be.test'
})
</script>

<style scoped>
</style>