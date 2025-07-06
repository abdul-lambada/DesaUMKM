<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Umkm;
use App\Models\Product;
use App\Models\Event;
use App\Models\Homestay;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\CommunityGroup;
use App\Models\Booking;
use App\Models\Feedback;
use App\Models\SuratOnline;
use App\Models\MapPoint;

class PublicController extends Controller
{
    public function wisata() {
        $wisata = Wisata::latest()->get();
        return view('public.wisata', compact('wisata'));
    }
    public function umkm() {
        $umkm = Umkm::latest()->get();
        return view('public.umkm', compact('umkm'));
    }
    public function produk() {
        $produk = Product::latest()->get();
        return view('public.produk', compact('produk'));
    }
    public function event() {
        $event = Event::latest()->get();
        return view('public.event', compact('event'));
    }
    public function homestay() {
        $homestay = Homestay::latest()->get();
        return view('public.homestay', compact('homestay'));
    }
    public function artikel() {
        $artikel = Article::latest()->get();
        return view('public.artikel', compact('artikel'));
    }
    public function galeri() {
        $galeri = Gallery::latest()->get();
        return view('public.galeri', compact('galeri'));
    }
    public function komunitas() {
        $komunitas = CommunityGroup::latest()->get();
        return view('public.komunitas', compact('komunitas'));
    }
    public function booking() {
        $booking = Booking::latest()->get();
        return view('public.booking', compact('booking'));
    }
    public function feedback() {
        $feedback = Feedback::latest()->get();
        return view('public.feedback', compact('feedback'));
    }
    public function suratOnline() {
        $suratOnline = SuratOnline::latest()->get();
        return view('public.surat-online', compact('suratOnline'));
    }
    public function mappoint() {
        $mappoint = MapPoint::latest()->get();
        return view('public.mappoint', compact('mappoint'));
    }
    public function home() {
        $produk = \App\Models\Product::latest()->take(3)->get();
        $event = \App\Models\Event::latest()->take(2)->get();
        $feedback = \App\Models\Feedback::latest()->take(2)->get();
        $galeri = \App\Models\Gallery::latest()->take(4)->get();
        return view('public.home', compact('produk', 'event', 'feedback', 'galeri'));
    }
} 