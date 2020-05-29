@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <!--ループ処理-->
     <ul class="list-group">
        <li class="list-group-item" v-for="(todo, index) in list">
            @{{ todo.task }}
            <span class="pull-right">
                <button class="btn btn-xs btn-info" v-on:click="edit(index);">
                    <span class="glyphicon glyphicon-pencil"></span>
                </button>

                <button class="btn btn-xs btn-warning" v-on:click="remove(todo.created_at,index);"> <!--todo.id は undefined になる-->
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </span>
        </li>
     </ul>
    </div>
</div>
@endsection
