<x-layouts.app>

    {{-- Se o nome da variavel for o mesmo do paramentro passado por ela, dá pra simplificar --}}
    <livewire:projects.show :$project />

    
    <livewire:projects.proposals :project="$project" />


</x-layouts.app>