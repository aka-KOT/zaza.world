@extends('admin.layout')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Set date</h3>
    </div>
    {{ Form::open(array('url'=>action('AdminReportAdController@getIndex'), 'method' => 'GET', 'role'=>'form')) }}
        <div class="box-body">
            <div class="form-group">
                <label for="begin">Begin date</label>
				<input class="form-control " id="begin"  name="begin" type="date" value="{{ $begin }}" >
            </div>
            <div class="form-group">
                <label for="end">End date</label>
                <input class="form-control " id="end"  name="end" type="date" value="{{ $end }}" >
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {{ Form::close() }}
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $title }} </h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th style="width: 10px">Transaction ID</th>
                            <th>Transaction Type</th>
                            <th>Name of Ad</th>
                            <th>Category/Subcategory </th>
                            <th>Username/User ID</th>
                            <th>Cost, AED </th>
                            <th>Created at</th>
                            <th>Time</th>
                            <th>Moderated by </th>
							<th>Time </th>
                            <th>Status</th>
                        </tr>
                        @foreach ($items as $i)
                            <tr>
                                <td><a href='/?show_id={{ $i->id }}' target='_blank'>{{ $i->id_spec }}</a></td>
                                <td>AD</td>
                                <td>{{ $i->title }}</td>
                                <td>
									{{ 
										(isset($advert_cat[$i->relOneCat->cat1_id]) ? $advert_cat[$i->relOneCat->cat1_id].' - ' : null).
										(isset($advert_cat[$i->relOneCat->cat2_id]) ? $advert_cat[$i->relOneCat->cat2_id].' - ' : null).
										(isset($advert_cat[$i->relOneCat->cat3_id]) ? $advert_cat[$i->relOneCat->cat3_id].' - ' : null).
										(isset($advert_cat[$i->relOneCat->cat4_id]) ? $advert_cat[$i->relOneCat->cat4_id].' - ' : null)
									}}
								</td>
                                <td>{{ $i->relUser->full_name }} / {{ $i->relUser->id_spec }}</td>
                                <td>{{ $i->price }}</td>
                                <td>{{ $i->created_at }}</td>
								<td>{{ $i->created_time_spec }}</td>
								
								<td>{{ (isset($ar_modarators[$i->moderator_id]) ?  $ar_modarators[$i->moderator_id]: null) }}</td>
								<td>{{ $i->modarete_time }}</td>
                                <td>{{ (isset($ar_status[$i->status_id]) ?  $ar_status[$i->status_id]: null) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
					<tfoot>
						<tr>
							<td colspan='5'>{{ $items->links() }}</td>
						</tr>
					</tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
