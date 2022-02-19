<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Models\Vendor;
//use App\ComplianceDoc;

class VendorController extends VoyagerBaseController
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** $issue_parties = \App\IssuingParty::orderBy('name','ASC')->get();
        $documents = \App\ComplianceDoc::orderBy('doc_title','ASC')->get();
        return view('contract/compliance-docs')
                    ->with('documents', $documents)
                    ->with('issuing_parties',$issue_parties);
        **/
    }

    /*public function issuing_org()     
    {    
        return $this->hasOne('IssuingParty::class', 'id', 'issuing_org_id');     
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$postMode = request('activeFlag');
        $newVendorRecord = new Vendor;
        $newVendorRecord->name =  request('hotel_name');
        var_dump(request('issueOrg')."<br>");
        exit;
        /*$newVendorRecord->issuing_org_id = request('issueOrg');
        $newVendorRecord->upload_frequency = request('uploadMode');
        $newVendorRecord->expiration = request('expireFlag');
        $newVendorRecord->active = request('activeFlag');
        $newVendorRecord->save();
        $notifyStat = ($postMode == 0 ? 'on disabled mode':'');
        //$categories = \App\ComplianceDoc::orderBy('doc_title','asc')->get();
        $saveDetails = [
        'success' => 1,
        'message' => 'New Compliance Document successfully created '.$notifyStat, 
        'postMode' => $postMode
        ];
        return redirect()->back()->with($saveDetails);
        /*var_dump(quotemeta(request('newDocLabel'))."<br>");
        var_dump(request('issueOrg')."<br>");
        var_dump(request('uploadMode')."<br>");
        var_dump(request('expireFlag')."<br>");
        var_dump(request('activeFlag'));*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComplianceDocs  $complianceDocs
     * @return \Illuminate\Http\Response
     */
    public function show(ComplianceDoc $doc_no)
    {
        /*$content = Content::find($id);
        //$this->authorize('view', $content);
        $document = ComplianceDoc::find($doc_no);
        return response()->json($document);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComplianceDocs  $complianceDocs
     * @return \Illuminate\Http\Response
     */
    public function edit(ComplianceDoc $complianceDocs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComplianceDocs  $complianceDocs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $doc_no)
    {
        /*$compliance_doc = \App\ComplianceDoc::find($doc_no);
        $compliance_doc->doc_title = $request->title;
        $compliance_doc->issuing_org_id = $request->issueOrgID;
        $compliance_doc->active = $request->statusFlag;
        $compliance_doc->expiration = $request->expireFlag;
        $compliance_doc->upload_frequency = $request->uploadFreq;
        $compliance_doc->save();
        return response()->json($compliance_doc);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComplianceDocs  $complianceDocs
     * @return \Illuminate\Http\Response
     */
    public function destroy($doc_no)
    {
        /*$compliance_doc = \App\ComplianceDoc::find($doc_no);
        $compliance_doc->delete();
        //return $category_id;
        //return redirect()->back()->with('success','Category deleted successfully');
        return response()->json($compliance_doc);*/
    }    //
}
