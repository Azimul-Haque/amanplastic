@extends('adminlte::page')

@section('title', 'CVCS | সদস্যগণ')

@section('css')

@stop

@section('content_header')
    <h1>
      সদস্যগণ
      <div class="pull-right">
        {{-- <a class="btn btn-success" href="{{ route('index.application') }}" target="_blank"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add Member</a> --}}
      </div>
    </h1>
@stop

@section('content')
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>নাম</th>
        <th>যোগাযোগের নম্বর ও ইমেইল এড্রেস</th>
        <th>অফিস তথ্য</th>
        <th>ছবি</th>
        <th width="10%">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($members as $member)
      <tr>
        <td>
          <a href="{{ route('dashboard.singlemember', $member->unique_key) }}" title="সদস্য তথ্য দেখুন">
            {{ $member->name_bangla }}<br/>{{ $member->name }}
          </a>
        </td>
        <td>{{ $member->mobile }}<br/>{{ $member->email }}</td>
        <td>{{ $member->office }}<br/>{{ $member->profession }} ({{ $member->designation }})</td>
        <td>
          @if($member->image != null)
            <img src="{{ asset('images/users/'.$member->image)}}" style="height: 50px; width: auto;" />
          @else
            <img src="{{ asset('images/user.png')}}" style="height: 50px; width: auto;" />
          @endif
        </td>
        <td>
          <a class="btn btn-sm btn-success" href="{{ route('dashboard.singlemember', $member->unique_key) }}" title="সদস্য তথ্য দেখুন"><i class="fa fa-eye"></i></a>
          {{-- <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteMemberModal{{ $member->id }}" data-backdrop="static"><i class="fa fa-trash-o"></i></button> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $members->links() }}
@stop

@section('js')

@stop