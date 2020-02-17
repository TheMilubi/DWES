# from django.shortcuts import render
from django.views.generic import ListView, DetailView
from .models import Post


class BlogView(ListView):
    model = Post
    template_name = 'home.html'

class BlogDetail(DetailView):
    model = Post
    template_name = 'post_detail.html'
    context_object_name = 'post'
