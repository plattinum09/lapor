<table class="table table-responsive" id="slides-table">
    <thead>
        <th>Title</th>
        <th>Image</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($slides as $slide)
        <tr>
            <td>{!! $slide->title !!}</td>
            <td>{!! $slide->image !!}</td>
            <td>{!! $slide->created_at !!}</td>
            <td>{!! $slide->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['slides.destroy', $slide->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('slides.show', [$slide->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('slides.edit', [$slide->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>