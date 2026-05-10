@component('mail::message')
    {{-- Logo personalizada --}}
    <div style="text-align: center; margin-bottom: 20px; width: 100%; height: auto;">
        <img src="{{ url('assets/images/1-Photoroom.png') }}" alt="Assessorarte" width="150">
    </div>

    {{-- Saudação --}}
    # Prezado(a),

    {{-- Corpo da mensagem --}}
    Recebemos uma solicitação para redefinição da senha de acesso à sua conta no sistema **Assessorarte**.
    Para sua segurança, clique no botão abaixo para criar uma nova senha:

    {{-- Botão --}}
    @component('mail::button', ['url' => $actionUrl, 'color' => 'success'])
        Redefinir Senha
    @endcomponent

    {{-- Observações finais --}}
    Caso não tenha feito essa solicitação, **nenhuma ação é necessária**.
    Sua senha atual permanecerá válida e segura.

    {{-- Assinatura personalizada --}}
    Atenciosamente,
    **Equipe Assessorarte**

    {{-- Rodapé institucional --}}
    <hr style="margin: 30px 0;">
    <div style="text-align: center; font-size: 12px; color: #666;">
        &copy; {{ date('Y') }} Assessorarte. Todos os direitos reservados.
        Este é um e-mail automático, por favor, não responda.
    </div>

    {{-- Subcopy (link alternativo) --}}
    @slot('subcopy')
        Se tiver dificuldades para clicar no botão acima, copie e cole o link abaixo em seu navegador:
        [{{ $displayableActionUrl }}]({{ $actionUrl }})
    @endslot
@endcomponent
