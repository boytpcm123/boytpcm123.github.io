@unless($categories->isEmpty())
    @foreach ($categories as $category)
        <tr>
            <td>{!!$category->id!!}</td>
            @if($category->depth == 0)
                <td class="text-left"><b>{!! $category->name_en !!}</b></td>
            @else
                <td class="text-left">{!!str_repeat('----|&nbsp;', $category->depth).$category->name_en!!}</td>
            @endif
             @if($category->depth == 0)
                <td class="text-left"><b>{!! $category->name_vi !!}</b></td>
            @else
                <td class="text-left">{!!str_repeat('----|&nbsp;', $category->depth).$category->name_vi!!}</td>
            @endif
            <td>{!!$category->request_type!!}</td>
            <td class="text-center">
                <img src="{!!asset(ICON_NORMAL_IMAGE_PATH_STORAGE.$category->icon_normal)!!}" class="img-responsive" width="100" height="80">
            </td>
            <td class="text-center">
                <img src="{!!asset(ICON_HIGHLIGHT_IMAGE_PATH_STORAGE.$category->icon_highlight)!!}" class="img-responsive" width="100" height="80">
            </td>
            <td class="text-center">{!!$category->created_by!!}</td>
            <td class="text-center">{!!date('d-m-Y',strtotime($category->created_at))!!}</td>
            @if($category->status == 1)
                <td class="text-center">
                    <span class="label label-sm label-success">Active</span>
                </td>
            @else
                <td class="text-center">
                    <span class="label label-sm label-danger">Un-active</span>
                </td>
            @endif
            <td class="text-right">
                <a class="btn btn-info" href="{!!route('admin.category.edit',['id'=>$category->getKey()])!!}" title="Edit">Edit</a>
            </td>
            @include('admin.categories.partials.tree', ['categories' => $category->children ])
        </tr>
        
    @endforeach
@endunless