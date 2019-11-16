|SNI> 
 <ProtElem::Init|API|SNI> szServer: '%hs'
       <ProtElem::Init|RET|SNI> %d{WINERR}
    %d  admin   lpc \\  np  tcp via <MakeProtocolList|API|SNI> pConnectParams: %p, pProtList: %p, pfSsrpRequired: %p
               <MakeProtocolList|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
       f:\dd\ndp\fx\src\data\sni\src\open.cpp          <MakeProtocolList|RET|SNI> %d{WINERR}, *pfSsrpRequired: %d{BOOL}
   %s:%s       <Connect|API|SNI> pConsumerInfo: %p, pProtElem: %p, ppConn: %p, fIntSec: %d{BOOL}, cbBuffer: %Iu, pBuffer: %p, fSync: %d{BOOL}, timeout: %d
    <Connect|RET|SNI> %d{WINERR}
   <Connect|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
        <Connect|SNI> pBuffer: '%hs'
   http    <ConnectUsingCache|API|SNI> pConnectParams: %p, pProtOrder: %p, pConsumerInfo: %p, ppConn: %p, fIntSec: %d{BOOL}, cbBuffer: %d, pBuffer: %p, fSync: %d{BOOL}, timeout: %d
      <ConnectUsingCache|RET|SNI> false
      <ConnectUsingCache|SNI> timeout: %d
    <ConnectUsingCache|RET|SNI> true
               <CopyConnectionString|API|SNI> wszConnect: '%ls', wszCopyConnect: %p {LPWSTR*}
 <CopyConnectionString|ERR|SNI> LocalDB: failed to allocate connection string copy. %d{WINERR}
  <CopyConnectionString|ERR|SNI> LocalDB: copying connection string failed. %d{WINERR}
           <CopyConnectionString|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
   <CopyConnectionString|RET|SNI> %d{WINERR}
      ( l o c a l D B ) \     ( l o c a l D B )       <ConnectParameter::IsLocalDBConnectionString|API|SNI> wszConnect: '%ls'
        <ConnectParameter::IsLocalDBConnectionString|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
            <ConnectParameter::IsLocalDBConnectionString|ERR|SNI> LocalDB: No instance name specified. %d{WINERR}
          <ConnectParameter::IsLocalDBConnectionString|ERR|SNI> LocalDB: Missing instance name. %d{WINERR}
               <ConnectParameter::IsLocalDBConnectionString|RET|SNI> %d{WINERR}
   \   mssqlserver             <ConnectParameter::ParseConnectionString|API|SNI> szConnect: '%hs'
             <ConnectParameter::ParseConnectionString|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
        <ConnectParameter::ParseConnectionString|RET|SNI> %d{WINERR}
           <ConnectParameter::ParseConnectionString|SNI> m_szProtocolName: '%hs', m_szServerName: '%hs', m_szInstanceName: '%hs', m_szProtocolParameter: '%hs', m_szAlias: '%hs', m_fCanUseCache: %d{bool}
        MSSQLSERVER     MSSQLServer %s%s        <SNIOpenSyncEx|API|SNI> pConsumerInfo: %p, wszConnect: '%ls', ppConn: %p, fIntSec: %d{BOOL}, cbBuffer: %d, pBuffer: %p, pInstanceName: %p, fOverrideCache: %d{BOOL}, fSync: %d{BOOL}, timeout: %d
              <SNIOpenSyncEx|ERR|SNI> ProviderNum: %d{ProviderNum}, SNIError: %d{SNIError}, NativeError: %d{WINERR}
  <SNIOpenSyncEx|SNI> timeout(0): %d
     <SNIOpenSyncEx|SNI> timeout(1): %d
     <SNIOpenSyncEx|SNI> timeout(2): %d
     <SNIOpenSyncEx|ID|SNI> connection string: '%ls' <SNIOpenSyncEx|RET|SNI> %d{WINERR}
     <ProtList::AddTail|API|SNI> newElement: %p{ProtElem*}
  <LastConnectCache::Cache::Find|API|SNI> szValName: "%hs"
       <LastConnectCache::Cache::Find|RET|SNI> %p{CacheItem *
 f:\dd\ndp\fx\src\data\sni\src\reg.cpp   VIA SM  NP  TCP <GetProtocolEnum|API|SNI> pszProtocol: '%hs', pProtNum: %p
     <GetProtocolEnum|RET|SNI> %d{WINERR}
           <LastConnectCache::CacheItem::SetValue|API|SNI> szValName: "%hs", szValue: "%hs"
       <LastConnectCache::CacheItem::SetValue|RET|SNI> %d{BOOL}
       <LastConnectCache::Cache::Cleanup|API|SNI> 
            <LastConnectCache::Cache::Insert|API|SNI> szValName: "%hs", szValue: "%hs"
     <LastConnectCache::Cache::Insert|RET|SNI> %d{BOOL}
     <LastConnectCache::Cache::Remove|API|SNI> szValName: "%hs"
     <LastConnectCache::Cache::Remove|RET|SNI> %d{BOOL}
     <LastConnectCache::GetEntry|API|SNI> szAlias: '%hs', pProtElem: %p
     <LastConnectCache::GetEntry|SNI> pgLastConnectCache: %p
s
     * @return $this
     */
    public function attach($file, array $options = [])
    {
        $attachment = $this->createAttachmentFromPath($file);

        return $this->prepAttachment($attachment, $options);
    }

    /**
     * Create a Swift Attachment instance.
     *
     * @param  string  $file
     * @return \Swift_Mime_Attachment
     */
    protected function createAttachmentFromPath($file)
    {
        return Swift_Attachment::fromPath($file);
    }

    /**
     * Attach in-memory data as an attachment.
     *
     * @param  string  $data
     * @param  string  $name
     * @param  array  $options
     * @return $this
     */
    public function attachData($data, $name, array $options = [])
    {
        $attachment = $this->createAttachmentFromData($data, $name);

        return $this->prepAttachment($attachment, $options);
    }

    /**
     * Create a Swift Attachment instance from data.
     *
     * @param  string  $data
     * @param  string  $name
     * @return \Swift_Attachment
     */
    protected function createAttachmentFromData($data, $name)
    {
        return new Swift_Attachment($data, $name);
    }

    /**
     * Embed a file in the message and get the CID.
     *
     * @param  string  $file
     * @return string
     */
    public function embed($file)
    {
        if (isset($this->embeddedFiles[$file])) {
            return $this->embeddedFiles[$file];
        }

        return $this->embeddedFiles[$file] = $this->swift->embed(
            Swift_Image::fromPath($file)
        );
    }

    /**
     * Embed in-memory data in the message and get the CID.
     *
     * @param  string  $data
     * @param  string  $name
     * @param  string|null  $contentType
     * @return string
     */
    public function embedData($data, $name, $contentType = null)
    {
        $image = new Swift_Image($data, $name, $contentType);

        return $this->swift->embed($image);
    }

    /**
     * Prepare and attach the given attachment.
     *
     * @param  \Swift_Attachment  $attachment
     * @param  array  $options
     * @return $this
     */
    protected function prepAttachment($attachment, $options = [])
    {
        // First we will check for a MIME type on the message, which instructs the
        // mail client on what type of attachment the file is so that it may be
        // downloaded correctly by the user. The MIME option is not required.
        if (isset($options['mime'])) {
            $attachment->setContentType($options['mime']);
        }

        // If an alternative name was given as an option, we will set that on this
        // attachment so that it will be downloaded with the desired names from
        // the developer, otherwise the default file names will get assigned.
        if (isset($options['as'])) {
            $attachment->setFilename($options['as']);
        }

        $this->swift->attach($attachment);

        return $this;
    }

    /**
     * Get the underlying Swift Message instance.
     *
     * @return \Swift_Message
     */
    public function getSwiftMessage()
    {
        return $this->swift;
    }

    /**
     * Dynamically pass missing methods to the Swift instance.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->forwardCallTo($this->swift, $method, $parameters);
    }
}
