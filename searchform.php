<form class="form" action="<?= esc_url(home_url('/')) ?>">
    <input class="form-control" name="s" type="search" placeholder="Recherche" aria-label="Search" value="<?= get_search_query() ?>">
    <button class="btn btn-success mt-2" type="submit">Recherche</button>
</form>