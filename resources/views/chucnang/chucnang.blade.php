@extends('master')
@section('danhmuc')
<div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            @if (Auth::user()->nguoidung_id == 1 || Auth::user()->nguoidung_id == 2)
                            <ul>
                                <li>
                                    <a href="{!! URL::route('chucnang.nhapkho.getList') !!}">
                                        <img src="{{ asset('lib/images/nhapkho.png')}}" width="40px" height="20px" style="margin-top:-9px;" ><br> Nhập hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! URL::route('chucnang.xuatkho.getList') !!}">
                                        <img src="{{ asset('lib/images/xuatkho.png')}}" width="40px" height="30px" style="margin-top:-10px;"><br> Bán hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! URL::route('chucnang.chuyenkho.getList') !!}">
                                        <img src="{{ asset('lib/images/chuyenkho.png')}}" width="40px" height="30px" style="margin-top:-10px;"><br> Chuyển kho
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! URL::route('chucnang.khohang.thekho') !!}">
                                        <img src="{{ asset('lib/images/thekho.png')}}" width="40px" height="30px" style="margin-top:-10px;"><br> Thẻ kho
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! URL::route('chucnang.khohang.getKhohang') !!}">
                                        <img src="{{ asset('lib/images/khohang.png')}}" width="39px" height="30px" style="margin-top:-10px;"><br> Kho hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! URL::route('chucnang.khohang.tongton') !!}">
                                        <img src="{{ asset('lib/images/khohang.png')}}" width="39px" height="30px" style="margin-top:-10px;"><br> Báo cáo
                                    </a>
                                </li>
                            </ul>
                            @else
                            <ul>
                                <li>
                                    <a href="{!! URL::route('chucnang.khohang.thekho') !!}">
                                        <img src="{{ asset('lib/images/thekho.png')}}" width="40px" height="30px" style="margin-top:-10px;"><br> Thẻ kho
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! URL::route('chucnang.khohang.getKhohang') !!}">
                                        <img src="{{ asset('lib/images/khohang.png')}}" width="39px" height="30px" style="margin-top:-10px;"><br> Kho hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! URL::route('chucnang.khohang.tongton') !!}">
                                        <img src="{{ asset('lib/images/khohang.png')}}" width="39px" height="30px" style="margin-top:-10px;"><br> Báo cáo
                                    </a>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>

@stop
@section('header')

@stop
@section('content')

@stop