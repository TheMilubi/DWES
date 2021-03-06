from django.contrib.auth import forms
from django.urls import reverse_lazy
from django.views.generic import edit


class SingUpView(edit.CreateView):
    form_class = forms.UserCreationForm
    success_url = reverse_lazy('login')
    template_name = 'signup.html'
