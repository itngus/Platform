@extends('dashboard::layouts.dashboard')


@section('title',$name)
@section('description',$description)



@section('content')




    <!-- main header -->
    <header class="bg-light lter b-b wrapper-md">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h1 class="m-n font-thin h3 text-black">{{$name or ''}}</h1>
                <small class="text-muted">{{$description or ''}}</small>
            </div>
            <div class="col-sm-6 col-xs-12 text-right">
                <div class="btn-group" role="group">
                    <a href="{{ route('dashboard.systems.users.create')}}" class="btn btn-link"><i class="ion-ios-plus-outline fa fa-2x"></i></a>
                </div>
            </div>
        </div>
    </header>
    <!-- / main header -->


    <!-- main content -->
    <section class="bg-white-only b-l bg-auto no-border-xs">


        @if($users->count() > 0)
            <div class="panel">

                <div class="panel-body row">


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="w-xs">{{trans('dashboard::common.Manage')}}</th>
                                <th>Имя</th>
                                <th>Ссылка</th>
                                <th>{{trans('dashboard::common.Last edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{ route('dashboard.systems.users.edit',$user->id) }}"><i
                                                    class="fa fa-bars"></i></a>
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>

                                    <td>{{ $user->updated_at or $user->created_at }}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-8">
                            <small class="text-muted inline m-t-sm m-b-sm">{{trans('dashboard::common.show')}} {{$users->total()}}
                                -{{$users->perPage()}} {{trans('dashboard::common.of')}} {!! $users->count() !!} {{trans('dashboard::common.elements')}}</small>
                        </div>
                        <div class="col-sm-4 text-right text-center-xs">
                            {!! $users->render() !!}
                        </div>
                    </div>
                </footer>
            </div>

        @else

            <div class="jumbotron text-center">
                <h3 class="font-thin">Вы ещё не создали ни одной роли</h3>

                <a href="{{ route('dashboard.systems.roles.create')}}" class="btn btn-link">Создать</a>
            </div>

        @endif


    </section>
    <!-- / main content -->


@stop




