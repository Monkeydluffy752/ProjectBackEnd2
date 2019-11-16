um}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
   <Np::OpenPipe|RET|SNI> %d{WINERR}
      <Np::Open|API|SNI> pConn: %p{SNI_Conn*}, pProtElem: %p{ProtElem*}, ppProv: %p{SNI_Provider**}
  <Np::Open|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
       <Np::Open|ID|SNI> connection: %p{ProtElem}      <Np::Open|SNI> %u#{Np}, handle: %p{HANDLE}
     <Np::Open|RET|SNI> %d{WINERR}
          <Np::WriteSync|API|SNI> %u#, pPacket: %p{SNI_Packet*}, pInfo: %p{SNI_ProvInfo*}
                <Np::WriteSync|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
  <Np::WriteSync|RET|SNI> %d{WINERR}
     <Np::PartialReadSync|API|SNI> %u#, pPacket: %p{SNI_Packet*}, cbBytesToRead: %d, timeout: %d
    <Np::PartialReadSync|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
    <Np::PartialReadSync|RET|SNI> %d{WINERR}
       <Np::PartialReadAsync|API|SNI> %u#, pPacket: %p{SNI_Packet*}, cbBytesToRead: %d, pInfo: %p{SNI_ProvInfo*}
      <Np::PartialReadAsync|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
   <Np::PartialReadAsync|RET|SNI> %d{WINERR}
      <Np::RepostReadAsync|API|SNI> %u#, pPacket: %p{SNI_Packet*}
    <Np::RepostReadAsync|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
    <Np::RepostReadAsync|RET|SNI> %d{WINERR}
       <Np::SendPacketAsync|API|SNI> %u#, pPacket: %p{SNI_Packet*}, fUseComplPort: %d{BOOL}
           <Np::SendPacketAsync|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
    <Np::SendPacketAsync|RET|SNI> %d{WINERR}
       <Np::WriteAsync|API|SNI> %u#, pPacket: %p{SNI_Packet*}, pInfo: %p{SNI_ProvInfo*}
       <Np::WriteAsync|RET|SNI> %d{WINERR}
    <Np::ReadDone|API|SNI> %u#, ppPacket: %p{SNI_Packet**}, ppLeftOver: %p{SNI_Packet**}, dwBytes: %d, dwError: %d{WINERR}
 <Np::ReadDone|RET|SNI> %d{WINERR}
      <Np::ReadDone|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
   <Np::CallbackError|API|SNI> %u#
        <Np::CallbackError|ERR|SNI> SNIPacketPostQCS failed
            <Np::WriteDone|API|SNI> %u#, ppPacket: %p{SNI_Packet**}, dwBytes: %d, dwError: %d{WINERR}
      <Np::WriteDone|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
  <Np::WriteDone|RET|SNI> %d{WINERR}
     <Np::Release|API|SNI> 
 <Np::QueryImpersonation|API|SNI> %u#
   <Np::QueryImpersonation|RET|SNI> %d{WINERR}
    <Np::ImpersonateChannel|API|SNI> %u#
           <Np::ImpersonateChannel|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
 <Np::ImpersonateChannel|RET|SNI> %d{WINERR}
    <Np::RevertImpersonation|API|SNI> %u#
          <Np::RevertImpersonation|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
        <Np::RevertImpersonation|RET|SNI> %d{WINERR}
   <Np::Win9xWaitForData|API|SNI> %u#, iTimeOut: %d
       <Np::Win9xWaitForData|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
   <Np::Win9xWaitForData|RET|SNI> %d{WINERR}
      <Np::ReadSync|API|SNI> %u#, ppNewPacket: %p{SNI_Packet**}, iTimeOut: %d
        <Np::ReadSync|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
   <Np::ReadSync|RET|SNI> %d{WINERR}
      <Np::ReadAsync|API|SNI> %u#, ppNewPacket: %p{SNI_Packet**}, pPacketKey: %p
     <Np::ReadAsync|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
  <Np::ReadAsync|RET|SNI> %d{WINERR}
     <Np::Close|API|SNI> %u#
        <Np::Close|RET|SNI> %d{WINERR}
 <Np::Close|ERR|SNI> WaitForSingleObject failed:%d{WINERR}
  v