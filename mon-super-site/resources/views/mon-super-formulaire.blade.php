<form {{-- Notez l'utilisation de "POST". --}} method="POST" action="/mon-super-formulaire">
    {{-- La directive "csrf" permet de se protéger des attaques CSRF.
    Il s'agit d'un très vaste sujet, alors partons du principe
    qu'elle est requise dans chacun de vos formulaires. --}}
    @csrf

    <input type="text" name="nom" required>

    <button type="submit">
        Envoyer
    </button>
</form>
