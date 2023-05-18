@extends('layout.app')

<form action="{{ route('games.store} }}" method= "POST">
    @csrf 

    <label for="GameName">Prova</label>
    <input type="text" name="" id="">

    <label for="GameVote">Prova</label>
    <input type="text" name="" id="">

    <input type="submit" value="send">
</form>
