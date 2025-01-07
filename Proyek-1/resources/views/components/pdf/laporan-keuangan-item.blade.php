<tr @style(['color: red' => $isNegative])>
    <td style="padding-left: 1rem">
        @isset($kodeRekening)
            <span style="color: #8f8f8f; padding-right: 0.5rem">({{ $kodeRekening }})</span>
        @endif <span>{{ $nama }}</span>
    </td>
    <td style="text-align: right">
        <span>
            @if ($isNegative)
                <span>-</span>
            @endif
            Rp. {{ $nominal }}
        </span>
    </td>
</tr>
