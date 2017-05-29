<table class="table table-responsive" id="vdos-table">
    <thead>
        <th>Title</th>
        <th>Url</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($vdos as $vdo)
        <tr>
            <td>{!! $vdo->title !!}</td>
            <td>{!! $vdo->url !!}</td>
            <td>{!! $vdo->created_at !!}</td>
            <td>{!! $vdo->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['vdos.destroy', $vdo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vdos.show', [$vdo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vdos.edit', [$vdo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>