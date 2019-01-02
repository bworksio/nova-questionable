<router-link tag="h3" :to="{name: 'nova-questionable'}" class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" version="1.1" width="34" height="34"  viewBox="0 0 34 34" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path class="clr-i-outline clr-i-outline-path-1" d="M29.29,34H6.71A1.7,1.7,0,0,1,5,32.31V6.69A1.75,1.75,0,0,1,7,5H9V7H7V32H29V7H27V5h2.25A1.7,1.7,0,0,1,31,6.69V32.31A1.7,1.7,0,0,1,29.29,34Z"></path>
        <path class="clr-i-outline clr-i-outline-path-2" d="M16.66,25.76,11.3,20.4A1,1,0,0,1,12.72,19l3.94,3.94,8.64-8.64a1,1,0,0,1,1.41,1.41Z"></path>
        <path class="clr-i-outline clr-i-outline-path-3" d="M26,11H10V7.33A2.34,2.34,0,0,1,12.33,5h1.79a4,4,0,0,1,7.75,0h1.79A2.34,2.34,0,0,1,26,7.33ZM12,9H24V7.33A.33.33,0,0,0,23.67,7H20V6a2,2,0,0,0-4,0V7H12.33a.33.33,0,0,0-.33.33Z"></path>
    </svg>
    <span class="sidebar-label">
            Questions
    </span>
</router-link>

<ul class="list-reset mb-8">
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'questionnaires'
            }
        }" class="text-white ml-8 no-underline dim">
            <!-- {{ __('nova-questionable::resources.questionnaires') }} -->
            Questionnaires
        </router-link>
    </li>
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'questions'
            }
        }" class="text-white ml-8 no-underline dim">
            <!-- {{ __('nova-questionable::resources.questions') }} -->
            Questions
        </router-link>
    </li>
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'tags'
            }
        }" class="text-white ml-8 no-underline dim">
            <!-- {{ __('nova-questionable::resources.tags') }} -->
            Tags
        </router-link>
    </li>
</ul>
