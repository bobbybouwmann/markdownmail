<div class="theme">

    <div class="panel">

        <div class="panel-heading">

            <h4>{{ $theme->name }}</h4>

        </div>

        <div class="panel-body">

            <p>
                <small>Last updated {{ $theme->updated_at->diffForHumans() }}</small>
            </p>

            <a href="{{ route('themes.editor', $theme->id) }}" class="btn btn-primary">Theme editor</a>

            <a href="{{ route('themes.edit', $theme->id) }}" class="btn btn-primary">Edit theme</a>

            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#themeModal{{ $theme->id }}">
                <i class="fa fa-trash"></i>
            </button>

        </div>

    </div>

    <div class="modal fade" id="themeModal{{ $theme->id }}" tabindex="-1" role="dialog"
         aria-labelledby="themeModal{{ $theme->id }}Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('themes.destroy', $theme) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="themeModal{{ $theme->id }}Label">Delete Theme</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete "{{ $theme->name }}"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>