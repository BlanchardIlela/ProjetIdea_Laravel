 //Cette ligne permet de déclarer les données que le composant attend de l'extérieur.
 @props(['title', 'description'])

 <div class="flex min-h-[calc(100dvh-4rem)] items-center justify-center px-4">
        <div class="w-full max-w-md">
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight">{{ $title }}</h1>
                <p class="text-muted-foreground mt-1">{{ $description }}</p>
            </div>

            //Représente le contenu placé entre les balises d'un composant
            {{ $slot }}
        </div>
    </div>
