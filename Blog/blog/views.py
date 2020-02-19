# from django.shortcuts import render
from django.views.generic import ListView, DetailView
from django.views.generic.edit import CreateView, UpdateView, DeleteView
from .models import Post
from django.urls import reverse_lazy


class BlogList(ListView):
    model = Post
    template_name = 'home.html'


class BlogDetail(DetailView):
    model = Post
    template_name = 'post_detail.html'


class BlogCreate(CreateView):
    model = Post
    template_name = 'post_new.html'
    fields = '__all__'


class BlogUpdate(UpdateView):
    model = Post
    fields = ['title', 'body']
    template_name = 'post_edit.html'
    success_url = reverse_lazy('home')


class BlogDeleteView(DeleteView):
    model = Post
    template_name = 'post_delete.html'
    success_url = reverse_lazy('home')
